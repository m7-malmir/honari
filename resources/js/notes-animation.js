const canvas = document.getElementById('bgCanvas');
const ctx = canvas.getContext('2d');

let w, h;
function resize() {
  w = canvas.width = window.innerWidth;
  h = canvas.height = window.innerHeight;
}
window.addEventListener('resize', resize);
resize();

const notes = ['♪', '♫', '♩'];
const mouse = { x: null, y: null };
window.addEventListener('mousemove', e => {
  mouse.x = e.clientX;
  mouse.y = e.clientY;
});

class Note {
  constructor() {
    this.reset();
    this.delay = Math.floor(Math.random() * 300);
  }

  reset() {
    this.x = Math.random() * w;
    this.y = Math.random() * h;
    this.vx = Math.random() * 4 - 2;
    this.vy = Math.random() * 4 - 2;
    this.size = Math.random() * 25 + 20;
    this.char = notes[Math.floor(Math.random() * notes.length)];
    this.colorHue = Math.floor(Math.random() * 360);
    this.life = 0;
    this.totalLife = 360;
    this.fadeInDuration = 60;
    this.fadeOutStart = 300;
    this.delay = Math.floor(Math.random() * 300);
  }

  update() {
    if (this.life < this.delay) {
      this.life++;
      return;
    }

    const age = this.life - this.delay;
    this.x += this.vx;
    this.y += this.vy;

    if (mouse.x && mouse.y) {
      const dx = this.x - mouse.x;
      const dy = this.y - mouse.y;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < 100) {
        const angle = Math.atan2(dy, dx);
        const force = (1 - dist / 100) * 4;
        this.vx += Math.cos(angle) * force;
        this.vy += Math.sin(angle) * force;
      }
    }

    this.vx *= 0.99;
    this.vy *= 0.99;

    if (age >= this.totalLife) this.reset();
    this.life++;
  }

  getAlpha() {
    if (this.life < this.delay) return 0;
    const age = this.life - this.delay;

    if (age < this.fadeInDuration) {
      return age / this.fadeInDuration;
    } else if (age > this.fadeOutStart) {
      return 1 - ((age - this.fadeOutStart) / (this.totalLife - this.fadeOutStart));
    } else {
      return 1;
    }
  }

  draw(ctx) {
    const alpha = this.getAlpha();
    if (alpha <= 0) return;

    ctx.fillStyle = `hsla(${this.colorHue}, 80%, 70%, ${alpha})`;
    ctx.font = `${this.size}px Arial`;
    ctx.fillText(this.char, this.x, this.y);
  }
}

const notesArray = Array.from({length: 20}, () => new Note());

function animate() {
  ctx.clearRect(0, 0, w, h);
  notesArray.forEach(note => {
    note.update();
    note.draw(ctx);
  });
  requestAnimationFrame(animate);
}

animate();

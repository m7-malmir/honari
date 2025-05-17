<script>
    let currentAudio = null;
    let durationString = ''; // Store the duration string for display

    function playMusic(file, title, artist, cover, duration) {
        const bar = document.getElementById('music-player-bar');
        const audio = document.getElementById('audio-player');
        const progressBar = document.getElementById('player-progress-bar');

        // Update player info
        document.getElementById('player-cover').src = cover;
        document.getElementById('player-title').innerText = title;
        document.getElementById('player-artist').innerText = artist;
        durationString = duration; // Store for display
        document.getElementById('player-duration').innerText = '00:00 / ' + durationString;

        // Stop any currently playing audio before starting a new one
        if (currentAudio && !currentAudio.paused) {
            currentAudio.pause();
        }
        // Reset the previous progress bar and time display
        if(progressBar) progressBar.style.width = '0%';
        if(audio) audio.currentTime = 0;
        document.getElementById('player-duration').innerText = '00:00 / ' + durationString;


        audio.src = file;
        audio.volume = document.getElementById('player-volume').value; // Set volume from slider
        audio.load(); // Load the audio to get metadata like duration

        // Wait for metadata to load before playing and getting duration
        audio.onloadedmetadata = function() {
             audio.play();
             bar.classList.remove('translate-y-full', 'invisible');
             bar.classList.add('translate-y-0', 'visible');
             currentAudio = audio;
             // Update time and progress bar as audio plays
             audio.ontimeupdate = updatePlayerProgress;
             // Update total duration display once metadata is loaded
             document.getElementById('player-duration').innerText = '00:00 / ' + formatTime(audio.duration);

        }

        // Handle error loading audio
        audio.onerror = function() {
            console.error("Error loading audio:", audio.error);
            hidePlayer(); // Hide the player if audio fails to load
            alert("مشکلی در پخش موسیقی پیش آمد.");
        }
    }

    function updatePlayerProgress() {
        const audio = document.getElementById('audio-player');
        const progressBar = document.getElementById('player-progress-bar');
        const durationSpan = document.getElementById('player-duration');

        const currentTime = audio.currentTime;
        const duration = audio.duration; // Use the actual audio duration

        // Update time display
        const cur = formatTime(currentTime);
         // Show actual duration once metadata is loaded, otherwise use the provided string
        const dur = isNaN(duration) ? durationString : formatTime(duration);
        durationSpan.innerText = `${cur} / ${dur}`;


        // Update progress bar width
        if (!isNaN(duration) && progressBar) { // Ensure duration is a number before calculating
            const percentage = (currentTime / duration) * 100;
            progressBar.style.width = percentage + '%';
        } else if (progressBar) {
             progressBar.style.width = '0%'; // Reset if duration is not available
        }
    }


    function toggleMusic() {
        const audio = document.getElementById('audio-player');
        if (!audio) return; // Check if audio element exists
        if (audio.paused) {
            audio.play();
        } else {
            audio.pause();
        }
    }

    function changeVolume(el) {
        const audio = document.getElementById('audio-player');
         if (!audio) return;
        audio.volume = el.value;
    }

    function hidePlayer() {
        const bar = document.getElementById('music-player-bar');
        const audio = document.getElementById('audio-player');
        const progressBar = document.getElementById('player-progress-bar');

        if(bar) bar.classList.add('translate-y-full', 'invisible');
        if(bar) bar.classList.remove('translate-y-0', 'visible');

        if(audio) {
            audio.pause();
            audio.currentTime = 0; // Reset playback time
        }
        if(progressBar) progressBar.style.width = '0%'; // Reset progress bar
        document.getElementById('player-duration').innerText = '00:00 / 00:00'; // Reset time display

        currentAudio = null; // Clear current audio reference
    }

    function changeIcon(state){
         const playIcon = document.getElementById('play-icon');
         if (!playIcon) return;
        playIcon.innerHTML = state === 'pause'
            ? `<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M6 4h4v16H6zm8 0h4v16h-4z"/></svg>` // Pause icon SVG
            : `<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-6.586-3.763A1 1 0 007 8.16v7.679a1 1 0 001.166.987L14.752 13.832a1 1 0 000-2.664z"/></svg>`; // Play icon SVG
    }

    function formatTime(sec) {
        if (isNaN(sec)) return '00:00';
        sec = Math.floor(sec);
        const m = Math.floor(sec / 60);
        let s = sec % 60;
        if (s < 10) s = '0' + s;
        return `${m}:${s}`;
    }

     // Ensure player state is reset on page load
     window.onload = hidePlayer;


</script>

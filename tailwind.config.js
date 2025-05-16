/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        dark: {
          bg: '#012734',     // رنگ پس‌زمینه اصلی (مشکی خیلی تیره)
          surface: '#012734', // هدر و فوتر (خاکستری پررنگ متمایل به آبی)
          text: '#E5E7EB',   // متن‌های روشن (خاکستری خیلی روشن)
          link: '#FBBF24',   // لینک‌ها و دکمه‌ها (زرد طلایی Accent)
          muted: '#D1D5DB',   // متن‌های ثانویه یا کم‌رنگ‌تر (خاکستری ملایم)
          border: '#374151', // کادرها و خطوط جداکننده (خاکستری تیره)
        },
      },
      keyframes: {
        move: {
          '0%': { opacity: '1', transform: 'translate(-100px, 0)' },
          '50%': { opacity: '1', transform: 'translate(50vw, 20vh)' },
          '100%': { opacity: '0', transform: 'translate(100vw, 40vh)' },
        },
      },
      animation: {
        note: 'move 12s linear infinite', // انیمیشن نت‌های موسیقی
      },
      fontFamily: {
        // استفاده از نام فونت Vazirmatn که قبلاً تنظیم کردیم
        vazir: ['Vazir', 'Tahoma', 'Arial', 'sans-serif'],
      },
    },
  },
  plugins: [],
};

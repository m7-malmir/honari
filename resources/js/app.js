import './bootstrap';
import '../css/app.css';
document.addEventListener('DOMContentLoaded', () => {
    const notes = document.querySelectorAll('.note');
    const colors = ['#ffffff'];

    notes.forEach((note) => {
        // تنظیم موقعیت و دیگر ویژگی‌های تصادفی
        const randomStartY = Math.random() * 80;  // موقعیت تصادفی در محور عمودی (بین 0% تا 80%)
        const randomDelay = Math.random() * 2; // زمان تأخیر تصادفی
        const randomDuration = 5 + Math.random() * 10;  // مدت زمان انیمیشن تصادفی (بین 5 تا 15 ثانیه)

        const randomSize = 30 + Math.random() * 50;  // سایز تصادفی بین 30px تا 80px
        const randomRotation = Math.random() * 360; // چرخش تصادفی اولیه (0 تا 360 درجه)

        // اعمال تنظیمات تصادفی اولیه
        note.style.left = `-100px`;  // شروع از چپ‌ترین قسمت
        note.style.top = `${randomStartY}vh`;  // موقعیت عمودی تصادفی
        note.style.fontSize = `${randomSize}px`;  // اندازه تصادفی
        note.style.animationDuration = `${randomDuration}s`;  // مدت زمان تصادفی برای نت
        note.style.animationDelay = `${randomDelay}s`;  // تأخیر تصادفی در شروع انیمیشن
        note.style.transform = `rotate(${randomRotation}deg)`; // چرخش تصادفی اولیه

        // تغییر ویژگی‌ها در هر بار اجرا
        note.addEventListener('animationiteration', () => {
            // موقعیت عمودی و مدت زمان جدید تصادفی در هر بار تکرار انیمیشن
            const newRandomStartY = Math.random() * 80;
            const newRandomDuration = 5 + Math.random() * 10;
            const newRandomRotation = Math.random() * 360; // چرخش تصادفی جدید

            note.style.top = `${newRandomStartY}vh`;
           // note.style.animationDuration = `${newRandomDuration}s`;
            note.style.transform = `rotate(${newRandomRotation}deg)`; // اعمال چرخش جدید
        });
    });

    // تعریف keyframes برای انیمیشن حرکت، چرخش، زوم و محو شدن
    const style = document.createElement('style');
    style.innerHTML = `
        @keyframes moveAndTransform {
            0% {
                left: -100px;
                opacity: 1;
                transform: scale(1) rotate(0deg);
            }
            50% {
                transform: scale(1.2) rotate(180deg); /* زوم و چرخش در میانه */
            }
            100% {
                left: 100vw;
                opacity: 0;
                transform: scale(0.5) rotate(360deg); /* محو شدن با چرخش و زوم */
            }
        }
    `;

    document.head.appendChild(style);

    // اضافه کردن ویژگی انیمیشن به هر نت
    notes.forEach((note) => {
        note.style.animationName = 'moveAndTransform';
        note.style.animationTimingFunction = 'linear';
    });
});

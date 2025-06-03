function generatePassword(length) {
    if (length < 4) {
        console.error('Ошибка: длина пароля должна быть не меньше 4');
        return;
    }

    const lowercase = 'abcdefghijklmnopqrstuvwxyz';
    const uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const digits = '0123456789';
    const symbols = '!@#$%^&*()_+-=<>?';
    const allChars = lowercase + uppercase + digits + symbols;
    function getRandomChar(str) {
        return str[Math.floor(Math.random() * str.length)];
    }


    // Обязательные элементы пароля
    const passwordChars = [
        getRandomChar(lowercase),
        getRandomChar(uppercase),
        getRandomChar(digits),
        getRandomChar(symbols),
    ];

    // Остальные символы
    for (let i = 4; i < length; i++) {
        passwordChars.push(getRandomChar(allChars));
    }

    // Перемешиваем символы
    return passwordChars.join('');
}
console.log(generatePassword(8));
console.log(generatePassword(16));
console.log(generatePassword(32)); 
console.log(generatePassword(3));
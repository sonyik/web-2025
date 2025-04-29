// Функция проверки числа на простоту
function isPrime(num) {
    if (typeof num !== 'number' || num <= 1 || !Number.isInteger(num)) {
        return false;
    }
    for (let i = 2; i <= Math.sqrt(num); i++) {
        if (num % i === 0) return false;
    }
    return true;
}

// Основная функция
function isPrimeNumber(input) {
    if (typeof input === 'number') {
        if (isNaN(input)) {
            console.error('Ошибка: переданный параметр не является числом');
            return;
        }
        console.log(`${input} ${isPrime(input) ? 'простое' : 'не простое'} число`);
    } 
    else if (Array.isArray(input)) {
        const results = [];
        for (const num of input) {
            if (typeof num !== 'number' || isNaN(num)) {
                console.error('Ошибка: элемент массива не число');
                return;
            }
            results.push(`${num} ${isPrime(num) ? 'простое' : 'не простое'}`);
        }
        console.log(results.join(', '));
    } 
    else {
        console.error('Ошибка: параметр должен быть числом или массивом чисел');
    }
}

// Тестовые вызовы
isPrimeNumber(7);             // 7 простое число
isPrimeNumber([2, 9, 15]);    // 2 простое, 9 не простое, 15 не простое
isPrimeNumber("текст");       // Ошибка
isPrimeNumber(2);             // 2 простое число
isPrimeNumber([1, 4, 17]);    // 1 не простое, 4 не простое, 17 простое
isPrimeNumber(NaN);           // Ошибка
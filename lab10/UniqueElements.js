function uniqueElements(arr) {
    const counts = {};
    for (const element of arr) {
        const key = String(element); // Преобразуем элемент в строку
        counts[key] = (counts[key] || 0) + 1; // Увеличиваем счетчик
    }
    return counts;
}

// Пример использования:
console.log(uniqueElements(['привет', 'hello', 1, '1'])); 
console.log(uniqueElements([42, '42', true, 'true'])); 
console.log(uniqueElements([null, undefined, 0, '0'])); 
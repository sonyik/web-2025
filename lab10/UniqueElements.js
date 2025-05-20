function uniqueElements(arr) {
    const result = {};
    for (const element of arr) {
        const key = String(element); // Преобразуем элемент в строку
        result[key] = (result[key] || 0) + 1; // Увеличиваем счетчик
    }
    return result;
}


console.log(uniqueElements(['привет', 'hello', 1, '1'])); 
console.log(uniqueElements([42, '42', true, 'true'])); 
console.log(uniqueElements([null, undefined, 0, '0'])); 
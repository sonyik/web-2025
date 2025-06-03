function transformArray(arr) {
    if (!Array.isArray(arr)) {
        console.error('Ошибка: вход должен быть массивом чисел');
        return;
    }

    const filtered = arr
        .map(x => x * 3)
        .filter(x => x > 10);

    console.log(filtered);
    return filtered;
}
transformArray([1, 2, 3, 4, 5]);
transformArray('asdasd');
transformArray([5, 17, 34, 4, 51]);

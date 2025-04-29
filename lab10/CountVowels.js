function countVowels(str) {
    if (typeof str !== 'string') {
        return 0; 
    }
    const vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
    const lowerStr = str.toLowerCase();
    let count = 0;
    
    for (let char of lowerStr) {
        if (vowels.includes(char)) {
            count++;
        }
    }
    return count;
}

// Примеры тестов
console.log(countVowels("Привет, мир!")); // 3 (и, е, и)
console.log(countVowels("Ёжик"));         // 2 (ё, и)
console.log(countVowels("BLABLA"));       // 0 (английские буквы не учитываются)
console.log(countVowels(123));            // 0 (не строка)
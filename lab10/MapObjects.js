function mapObject(obj, callback) {
    if (typeof obj !== 'object' || obj === null) {
        console.error('Ошибка: первый аргумент должен быть объектом');
        return;
    }

    const result = {};
    for (let key in obj) {
        if (obj.hasOwnProperty(key)) {
            result[key] = callback(obj[key]);
        }
    }
    console.log(result);
    return result;
}


const nums = { a: 1, b: 2, c: 3 };
const ErrorTest = 'abcdassdsd'
mapObject(nums, x => x * 2)
mapObject(ErrorTest, x => x * 2)
mapObject(nums, x => x + 1)
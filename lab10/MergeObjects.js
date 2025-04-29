function mergeObjects(obj1, obj2) {
    return { ...obj1, ...obj2 }; //Создает новый объект, куда сначала копируются все свойства из obj1, а затем из obj2.
    // Благодаря синтаксису spread и тому, что порядок указания объектов важен, то ключи obj2 перекрывают obj1.
}

// Пример использования:
console.log(mergeObjects({ a: 1, b: 2 }, { b: 3, c: 4 })); 
console.log(mergeObjects({ x: 10 }, { y: 20 })); 
console.log(mergeObjects({ a: { name: "John" } }, { a: { age: 30 } })); // (вложенные объекты перезаписываются полностью)
console.log(mergeObjects({}, { key: "value" })); 
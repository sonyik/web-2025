function extractNames(users) {
    if (!Array.isArray(users)) {
        console.error('Ошибка: вход должен быть массивом объектов');
        return;
    }

    const names = users.map(user => user.name);
    console.log(names);
    return names;
}


const users = [
    { id: 1, name: "Alex" },
    { id: 2, name: "Sergei" },
    { id: 3, name: "Ivan" }
];

const ErrorTest = 'adasdsad';
extractNames(users);
extractNames(ErrorTest);

var persona = {
    nombre,
    edad,
    cedula,
    function : createNewPerson(nombre) {
        var : obj = {},
        obj.nombre = nombre,
        obj.greeting = function () {
            alert('Hi I\'m' + this.nombre + '.');
        };
        return obj;
    }
};


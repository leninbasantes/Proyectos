/*var person = {
  firstName: "John",
  lastName: "Doe",
  age: 50,
  eyeColor: "blue",
  fullName: function () {
    return this.firstName + " " + this.lastName;
  },
};*/

var circulo = {
  radio: 3,
  calcularArea: function () {
    return Math.PI * Math.pow(this.radio, 2);
  },
  imprimirArea: function () {
    return "El area del circulo es: " + this.calcularArea();
  },
};

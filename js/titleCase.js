function titleCase(str) {
  var array = str.split(" ");
  for (i = 0; i < array.length; i++) {
    var newStr = array[i].toLowerCase().split("");
    var charAt = newStr[0].toUpperCase();
    newStr.shift(0);
    newStr.unshift(charAt);
    newStr = newStr.join("");
    array[i] = newStr;
  }
  str = array.join(" ");
  return str;
}
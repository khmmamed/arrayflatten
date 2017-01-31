/**
 * flatten array function 
 * by khm@med
 * @param noFlatten
 * @returns {Array}
 */
function arrayFlatten(noFlatten) {
    var flatten = [];
    for(var i=0; i< noFlatten.length; i++){
        if(Array.isArray(noFlatten[i])){
            //if array again recall recursive function
            flatten = flatten.concat(arrayFlatten(noFlatten[i]));
        } else {
            flatten.push(noFlatten[i]);
        }
    }
    return flatten;
}

//javascript sample
a = [1, 2, [3 , 4, 6,[1,2]],3, 13];

console.log(arrayFlatten(a));

// Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.
// It should remove all values from list a, which are present in list b keeping their order.
// arrayDiff
function arrayDiff(a, b) {
    let newArray = [];
    for (let i = 0; i < a.length; i++) {
        if (!b.includes(a[i])) {
            newArray.push(a[i]);
        }
    }
    return newArray;
}
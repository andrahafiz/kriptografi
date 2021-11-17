const playfair = (text1, key1, method) => {
    let str = "";
    const alphabet = "ABCDEFGHIKLMNOPQRSTUVWXYZ";
    const set = new Set();

    var key = key1.toUpperCase()
    var text = text1.toUpperCase()

    for (let i = 0; i < key.length; i++)
        if (key.charCodeAt(i) >= 'A'.charCodeAt(0) && key.charCodeAt(i) <= 'Z'.charCodeAt(0))
            if (key[i] != 'J')
                set.add(key[i]);

    for (let i = 0; i < alphabet.length; i++)
        set.add(alphabet[i]);

    let arr = new Array(6);
    for (let i = 0; i < 6; i++)
        arr[i] = new Array(6);

    let position = new Array(100);
    let x = 0,
        y = 0;
    for (let item of set) {
        if (x < 5) {
            arr[x][y] = item;
            position[item.charCodeAt(0)] = {
                x: x,
                y: y
            }

            y++;
            if (y == 5) {
                y = 0;
                x++;
            }
        }
    }
    for (let i = 0; i < 5; i++) {
        arr[i][5] = arr[i][0];
        arr[5][i] = arr[0][i];
    }

    let pairText = []
    let countPair = 0;
    let lastIndexPair = -1;
    let newText = "";
    for (let i = 0; i < text.length; i++) {
        if (text.charCodeAt(i) >= 'A'.charCodeAt(0) && text.charCodeAt(i) <= 'Z'.charCodeAt(0)) {
            if (countPair == 0) {
                pairText.push(new Array(2));
                lastIndexPair++;
                pairText[lastIndexPair][countPair++] = text[i];
                newText += text[i];
            } else if (countPair == 1) {
                if (pairText[lastIndexPair][0] == text[i]) {
                    pairText[lastIndexPair][countPair] = 'Z';
                    newText += 'Z';
                    i--;
                } else {
                    pairText[lastIndexPair][countPair] = text[i];
                    newText += text[i];
                }
                countPair = 0;
            }
        } else {
            newText += text[i];
        }
    }
    if (countPair == 1) {
        pairText[lastIndexPair][countPair] = 'Z';
        newText += 'Z';
    }

    let newChar = [];
    for (let i = 0; i < newText.length; i++) {
        if (newText.charCodeAt(i) < 'A'.charCodeAt(0) || newText.charCodeAt(i) > 'Z'.charCodeAt(0)) {
            newChar.push({
                char: newText[i],
                index: i,
            })
        }
    }

    let cipher = "";
    for (let i = 0; i < pairText.length; i++) {
        const first = position[pairText[i][0].charCodeAt(0)];
        const second = position[pairText[i][1].charCodeAt(0)];
        if (first.x == second.x) {
            if (method == "encrypt") {
                cipher += arr[first.x][first.y + 1] + arr[second.x][second.y + 1]
            } else {
                let fy = first.y - 1,
                    sy = second.y - 1;
                if (fy < 0) fy = 4;
                if (sy < 0) sy = 4;
                cipher += arr[first.x][fy] + arr[second.x][sy]
            }
        } else if (first.y == second.y) {
            if (method == "encrypt") {
                cipher += arr[first.x + 1][first.y] + arr[second.x + 1][second.y]
            } else {
                let fx = first.x - 1,
                    sx = second.x - 1;
                if (fx < 0) fx = 4;
                if (sx < 0) sx = 4;
                cipher += arr[fx][first.y] + arr[sx][second.y]
            }
        } else {
            cipher += arr[first.x][second.y] + arr[second.x][first.y];
        }
    }

    str = cipher;
    for (let i = 0; i < newChar.length; i++) {
        str = str.substring(0, newChar[i].index) + newChar[i].char + str.substring(newChar[i].index, str.length);
    }
    console.log(arr);
    console.log(pairText);
    return str;
}

function encryptPlayfair(text, key) {
    var result = playfair(text, key, 'encrypt')
    document.getElementById("playfairEncryptResult").innerHTML = result;
}
function decryptPlayfair(text, key) {
    var result = playfair(text, key, 'decrypt')
    document.getElementById("playfairDecryptResult").innerHTML = result;
}
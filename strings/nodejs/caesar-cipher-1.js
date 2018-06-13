process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', data => {
	inputString += data
})

process.stdin.on('end', end => {
	inputString = inputString.replace(/\s*$/, '').split('\n').map(str => str.replace(/\s*$/, ''))
	main()
})

process.on('SIGINT', function () {
	inputString = inputString.replace(/\s*$/, '').split('\n').map(str => str.replace(/\s*$/, ''))
	main()
	process.exit()
})

function readLine() {
	return inputString[currentLine++]
}

// Complete the caesarCipher function below.
function caesarCipher(string, spaces) {
	let alphabet         = 'abcdefghijklmnopqrstuvwxyz'
	let encrypted_string = ''

	string.split('').map((char, index) => {
		if (!(/[A-Za-z]/.test(char)))
		{
			encrypted_string += char
			continue
		}

		encrypted_string = 
	})
	return [s, k]
}

function main() {
	const string_length = readLine()
	const string        = readLine()
	const spaces        = parseInt(readLine(), 10)

	let result = caesarCipher(string, spaces)

	process.stdout.write("\n" + result + "\n");
}

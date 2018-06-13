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
function caesarCipher(string, sequence) {
	return string.split('').map(char => {
		if (!(/[A-Za-z]/.test(char)))
		{
			return char
		}

		let alphabet = (/[A-Z]/.test(char)) ? 'abcdefghijklmnopqrstuvwxyz'.toUpperCase() : 'abcdefghijklmnopqrstuvwxyz'
		let rotation = alphabet.indexOf(char) + sequence

		if (rotation > alphabet.length)
		{
			rotation = rotation - alphabet.length
		}

		return alphabet.substr(rotation, 1)
	}).join('')
}

function main() {
	const strlen_  = readLine()
	const string   = readLine()
	const sequence = parseInt(readLine(), 10)

	let result = caesarCipher(string, sequence)

	process.stdout.write(result + "\n");
}

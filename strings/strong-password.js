process.stdin.resume()
process.stdin.setEncoding('ascii')

var input_stdin       = '';
var input_stdin_array = '';
var input_currentline = 0;

process.stdin.on('data', function (data) {
	input_stdin += data;
})

process.stdin.on('end', function () {
	input_stdin_array = input_stdin.split('\n')
	main()
})

process.on('SIGINT', function () {
	input_stdin_array = input_stdin.split('\n')
	main()
	process.exit()
})

function readLine() {
	return input_stdin_array[input_currentline++];
}

function minimumNumber(n, password)
{
	let min_length         = 6
	let numbers            = '0123456789'
	let lower_case         = 'abcdefghijklmnopqrstuvwxyz'
	let upper_case         = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
	let special_characters = '!@#$%^&*()-+'

	if (password.length < min_length)
		return min_length - password.length

	let needs_numbers            = +(!numbers.split('').map(number => password.includes(number) || '').join(''))
	let needs_lower_case         = +(!lower_case.split('').map(char => password.includes(char) || '').join(''))
	let needs_upper_case         = +(!upper_case.split('').map(char => password.includes(char) || '').join(''))
	let needs_special_characters = +(!special_characters.split('').map(char => password.includes(char) || '').join(''))

	return needs_numbers + needs_lower_case + needs_upper_case + needs_special_characters
}

function main()
{
	var n        = parseInt(readLine())
	var password = readLine()
	var answer   = minimumNumber(n, password)

	console.log(password);

	process.stdout.write(answer + '\n')
}

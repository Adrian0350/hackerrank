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
	let numbers            = '0123456789'
	let lower_case         = 'abcdefghijklmnopqrstuvwxyz'
	let upper_case         = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
	let special_characters = '!@#$%^&*()-+'

	let min_length         = 6
	let min_by_rule        = 0
	let incomplete         = 0

	if (password.length < min_length)
		incomplete = min_length - password.length

	min_by_rule += +(!numbers.split('').map(number => password.includes(number) || '').join(''))
	min_by_rule += +(!lower_case.split('').map(char => password.includes(char) || '').join(''))
	min_by_rule += +(!upper_case.split('').map(char => password.includes(char) || '').join(''))
	min_by_rule += +(!special_characters.split('').map(char => password.includes(char) || '').join(''))

	return incomplete < min_by_rule ? min_by_rule : incomplete
}

function main()
{
	var n        = parseInt(readLine())
	var password = readLine()
	var answer   = minimumNumber(n, password)

	process.stdout.write(answer + '\n')
}

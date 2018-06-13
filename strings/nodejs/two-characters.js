process.stdin.resume()
process.stdin.setEncoding('ascii')

var input_stdin       = ''
var input_stdin_array = ''
var input_currentline = 0

process.stdin.on('data', function (data) {
	input_stdin += data
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
	return input_stdin_array[input_currentline++]
}

/////////////// ignore above this line ////////////////////

function twoCharaters(s) {
	let instances = {}

	console.log(s.split(''))
	s.split('').map(char => instances[char] += +(!!instances.hasOwnProperty(char)))

	console.log(instances)
}

function main() {
	var l = parseInt(readLine())
	var s = readLine()
	var result = twoCharaters(s)
	process.stdout.write('' + result + '\n')
}

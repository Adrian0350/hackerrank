'use strict'

process.stdin.resume()
process.stdin.setEncoding('utf-8')

let inputString = ''
let currentLine = 0

process.stdin.on('data', inputStdin => {
	inputString += inputStdin
})
process.stdin.on('end', _ => {
	inputString = inputString.replace(/\s*$/, '')
		.split('\n')
		.map(str => str.replace(/\s*$/, ''))

	main()
})
process.on('SIGINT', function ()
{
	inputString = inputString.trim().split('\n').map(str => str.trim())

	main()
	process.exit()
})

function readLine()
{
	return inputString[currentLine++]
}

// Complete the countApplesAndOranges function below.
function countApplesAndOranges(s, t, a, b, apples, oranges)
{
	if (a > s || s > t || t > b)
	{
		return ''
	}

	let sams_house = []

	for (var space = s; space <= t; space++)
	{
		sams_house.push(space)
	}

	let apples_landed = []
	apples.forEach(function(apple_position){
		if (isNaN(apple_position))
		{
			return ''
		}

		apples_landed.push(a + (apple_position))
	})

	let oranges_landed = []
	oranges.forEach(function(orange_position){
		if (isNaN(orange_position))
		{
			return ''
		}

		oranges_landed.push(b + (orange_position))
	})

	let apples_landed_in_sams_house = 0
	apples_landed.forEach(function(apple_landed){
		if (sams_house.includes(apple_landed))
		{
			apples_landed_in_sams_house++
		}
	})

	let oranges_landed_in_sams_house = 0
	oranges_landed.forEach(function(orange_landed){
		if (sams_house.includes(orange_landed))
		{
			oranges_landed_in_sams_house++
		}
	})

	let result = [apples_landed_in_sams_house, oranges_landed_in_sams_house]

	result.forEach(function(d){
		if (isNaN(d) || Math.pow(-10, 5) > d || Math.pow(10, 5) < d)
		{
			return ''
		}
	});

	return result.join("\n")
}

function main() {
	const st      = readLine().split(' ')
	const s       = parseInt(st[0], 10)
	const t       = parseInt(st[1], 10)
	const ab      = readLine().split(' ')
	const a       = parseInt(ab[0], 10)
	const b       = parseInt(ab[1], 10)
	const mn      = readLine().split(' ')
	const m       = parseInt(mn[0], 10)
	const n       = parseInt(mn[1], 10)
	const apples  = readLine().split(' ').map(applesTemp => isNaN(parseInt(applesTemp, 10)) ? '' : parseInt(applesTemp, 10))
	const oranges = readLine().split(' ').map(orangesTemp => isNaN(parseInt(orangesTemp, 10)) ? '' : parseInt(orangesTemp, 10))

	let constrain = [s, t, a, b, m, n]
	constrain.forEach(function(o){
		if (isNaN(o) || 1 > o || o > Math.pow(10, 5))
		{
			process.stdout.write('')
			process.exit()
		}
	});

	let result = countApplesAndOranges(s, t, a, b, apples, oranges)

	process.stdout.write(result)
}

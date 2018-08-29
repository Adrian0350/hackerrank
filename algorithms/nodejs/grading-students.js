process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', data => {
	inputString += data;
});

process.stdin.on('end', end => {
	inputString = inputString.trim().split('\n').map(str => str.trim())
	main()
});

process.on('SIGINT', function () {
	inputString = inputString.trim().split('\n').map(str => str.trim());

	main()
	process.exit()
})

function readLine() {
	return inputString[currentLine++];
}

function gradingStudents(grade) {
	let min_grade     = 38;
	let rounded_grade = Math.ceil(grade / 5) * 5;

	let new_grade     = grade >= min_grade && rounded_grade - grade < 3 ? rounded_grade : grade;

	return new_grade;
}

function main() {
	const n    = parseInt(readLine(), 10);
	let grades = [];

	for (let gradesItr = 0; gradesItr < n; gradesItr++)
	{
		const gradesItem = parseInt(readLine(), 10);
		grades.push(gradesItem);
	}

	let result = grades.map(gradingStudents);

	process.stdout.write(result.join("\n") + "\n");
}

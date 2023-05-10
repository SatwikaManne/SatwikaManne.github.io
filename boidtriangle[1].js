const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question('Enter the number of rows: ', (numRows) => {
  // Convert input to a number
  numRows = parseInt(numRows);

  // Loop through each row
  for (let i = 1; i <= numRows; i++) {
    // Print spaces before the first asterisk
    for (let j = 1; j <= numRows - i; j++) {
      process.stdout.write(' ');
    }

    // Print the first asterisk
    process.stdout.write('*');

    // Print spaces between the first and last asterisks
    for (let j = 1; j < i - 1; j++) {
      process.stdout.write(' ');
    }

    // Print the last asterisk
    if (i > 1) {
      process.stdout.write('*');
    }

    // Move to the next line
    process.stdout.write('\n');
  }

  // Close the readline interface
  rl.close();
});

// Set the text color to blue
console.log('\x1b[34m%s\x1b[0m', 'This text is blue!');
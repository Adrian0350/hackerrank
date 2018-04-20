# HackerRank

A repository containing [Hackerrank's](https://hackerrank.com) problems including warmup.
Most problems will be solved using `NodeJS` although some will be solved in `PHP` and other languages like `Swift` for practice purposes.

>> Note:
This only contains the problem's I've solved so one or multiple categories might be incomplete.


To run `PHP` scripts you'll need to have `PHP` with `CLI` installed in your system.
To run `NodeJS` scripts you'll need to have `NodeJS` installed in your system.

All `NodeJS` scripts will be slightly modified with a block of code* to make it `CLI` executable due to the fact that the original scripts do not receive a `SIGINT` signal when in `CLI`.

Code Block:

``
    process.on('SIGINT', function () {
        input_stdin_array = input_stdin.split('\n')
        main()
        process.exit()
    })
``

## NodeJS Usage Example:

`$ node strong-password.js`

`$ 5`

`$ #Hell`

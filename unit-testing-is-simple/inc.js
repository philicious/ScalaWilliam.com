const assert = require('assert');

function increment(n) {
  return n + 2;
}

assert.equal(2, increment(1));

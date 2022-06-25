import React from "react";
import ReactDOM from "react-dom";

function Example() {
  return (
    <div className="container">
      <h1 className="text-2xl">Ay LMAO</h1>
    </div>
  );
}

export default Example;

if (document.getElementById("example")) {
  ReactDOM.render(<Example />, document.getElementById("example"));
}

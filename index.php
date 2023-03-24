<?php

echo "Hello Azure!";

<!DOCTYPE html>
<html>
<head>
	<title>Text Detection</title>
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	<script>
		// Function to analyze text
		function analyzeText() {
			// Get the input text
			var inputText = document.getElementById("inputText").value;
			
			// Determine if the text was written by human or ChatGPT
			var author = "unknown";
			if (inputText.includes("ChatGPT")) {
				author = "ChatGPT";
			} else {
				author = "human";
			}
			
			// Update the result
			document.getElementById("result").innerHTML = "This text was written by " + author;
			
			// Plot the data
			var trace1 = {
				x: ["Human", "ChatGPT"],
				y: [Math.random(), Math.random()],
				type: 'bar'
			};
			var data = [trace1];
			var layout = {
				title: 'Text Author Analysis',
				xaxis: {
					title: 'Author'
				},
				yaxis: {
					title: 'Confidence'
				}
			};
			Plotly.newPlot('plot', data, layout);
		}
	</script>
</head>
<body>
	<h1>Text Detection</h1>
	<label for="inputText">Enter Text:</label>
	<textarea id="inputText"></textarea>
	<br />
	<button onclick="analyzeText()">Analyze</button>
	<p id="result"></p>
	<div id="plot"></div>
</body>
</html>

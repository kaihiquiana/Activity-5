<!DOCTYPE html>
<html>
<head>
    <title>Hiquiana BOYS - Calculator</title>
    <!--CSS Styling-->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result-box {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            border: 1px solid #000;
        }
        .green-bg {
            background-color: #4CAF50;
            color: white;
        }
        .blue-bg {
            background-color: #0078D7;
            color: white;
        }
        .blue-text {
            color: blue;
        }
        .orange-text {
            color: orange;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .separator {
            margin: 30px 0;
            border-top: 1px solid #ccc;
        }
        .student-info {
            background-color: #f5f5f5;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="student-info">
        <h2>Hiquiana, Richard A - 2025 - 3B</h2>
    </div>

    <h1>Activity 5 Calculator Results - BOYS</h1>
    
    <h2>URL: http://domain/{{ $operation1 }}/{{ $value1 }}/{{ $value2 }}/{{ $operation2 }}/{{ $value3 }}/{{ $value4 }}</h2>
    
    <!-- First Operation -->
    <h3>First Operation:</h3>
    <p class="{{ $isOddValue1 ? 'blue-text' : 'orange-text' }}">Value 1: {{ $value1 }}</p>
    <p class="{{ $isOddValue2 ? 'blue-text' : 'orange-text' }}">Value 2: {{ $value2 }}</p>
    
    <p>Operator: {{ $operation1 }}</p>
    
    @if ($errorMessage1)
        <p class="error">{{ $errorMessage1 }}</p>
    @else
        <p>Result:</p>
        <div class="result-box {{ $isEven1 ? 'green-bg' : 'blue-bg' }}">
            {{ $result1 }}
        </div>
    @endif
    
    <div class="separator"></div>
    
    <!-- Second Operation -->
    <h3>Second Operation:</h3>
    <p class="{{ $isOddValue3 ? 'blue-text' : 'orange-text' }}">Value 1: {{ $value3 }}</p>
    <p class="{{ $isOddValue4 ? 'blue-text' : 'orange-text' }}">Value 2: {{ $value4 }}</p>
    
    <p>Operator: {{ $operation2 }}</p>
    
    @if ($errorMessage2)
        <p class="error">{{ $errorMessage2 }}</p>
    @else
        <p>Result:</p>
        <div class="result-box {{ $isEven2 ? 'green-bg' : 'blue-bg' }}">
            {{ $result2 }}
        </div>
    @endif
</body>
</html>
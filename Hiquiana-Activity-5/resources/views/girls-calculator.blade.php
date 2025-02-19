<!DOCTYPE html>
<html>
<head>
    <title>Hiquiana GIRLS - Calculator</title>
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
        .normal-bg {
            background-color: green;
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
    </style>
</head>
<body>
    <h1>Activity 5 Calculator Results - GIRLS</h1>
    
    <h2>URL: http://domain/{{ $operation }}/{{ $value1 }}/{{ $value2 }}</h2>
    
    <p class="{{ $isOddValue1 ? 'blue-text' : 'orange-text' }}">Value 1: {{ $value1 }}</p>
    <p class="{{ $isOddValue2 ? 'blue-text' : 'orange-text' }}">Value 2: {{ $value2 }}</p>
    
    <p>Operator: {{ $operation }}</p>
    
    @if ($errorMessage)
        <p class="error">{{ $errorMessage }}</p>
    @else
        <p>Result:</p>
        <div class="result-box {{ $isEven ? 'green-bg' : 'normal-bg' }}">
            {{ $result }}
        </div>
    @endif
</body>
</html>
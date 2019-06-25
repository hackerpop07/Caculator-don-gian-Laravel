<form method="get">
    @csrf
    <h1>Caculator</h1>
    <br>
    <input type="number" name="numberA">
    <input type="number" name="numberB">
    <br>
    <button type="number" name="addition" value="+">Addition(+)</button>
    <button type="number" name="subtraction" value="-">Subtraction(-)</button>
    <button type="number" name="multiplication" value="*">Multiplication(x)</button>
    <button type="number" name="division" value="/">Division(/)</button>
    <br>
    ket qua: {{$kq}}
</form>

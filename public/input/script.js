document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('myForm');
    if (!form) return;
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        const year = document.querySelector('input[name="year"]').value;
        const month = document.querySelector('input[name="month"]').value;
        const day = document.querySelector('input[name="day"]').value;
        const time = document.querySelector('input[name="time"]').value;
        const params = new URLSearchParams({ year, month, day, time });

        // まずdata.jsonを上書き
        await fetch('/shityusuimei/public/api/save_input.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: params.toString()
        });

        // 2つのエンドポイントに同時POST
        const jichuPromise = fetch('/shityusuimei/src/jichu/index.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: params.toString()
        }).then(res => res.text());

        const nitchuPromise = fetch('/shityusuimei/src/Nitchu/index.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: params.toString()
        }).then(res => res.text());

        // 並列で待つ
        const [jichuResult, nitchuResult] = await Promise.all([jichuPromise, nitchuPromise]);
        document.getElementById('resultJichu').textContent = 'jichuの結果: ' + jichuResult;
        document.getElementById('resultNitchu').textContent = 'Nitchuの結果: ' + nitchuResult;

        // 全ての処理が終わったら画面遷移
        window.location.href = '/shityusuimei/public/meishiki/index.php';
    });
});

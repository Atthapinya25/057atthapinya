<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.6 เช็คเลขคู่หรือเลขคี่</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

    <nav class="bg-orange-600 text-white p-4 flex justify-between items-center px-10 shadow-lg">
        <div class="flex items-center gap-2">
            <div class="bg-orange-500 p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 items-center">
            <a href="#" class="text-orange-100">คำอธิบาย</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-orange-200 transition">การเขียนโปรแกรมแบบมีเงื่อนไข <span>▼</span></div>
            <div class="flex items-center gap-1 cursor-pointer hover:text-orange-200 transition">เขียนโปรแกรมวนซ้ำ <span>▼</span></div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden">
            
            <div class="p-10 flex-1">
                <h2 class="text-2xl font-bold mb-6 text-slate-800 border-l-4 border-orange-500 pl-4">1.6 เช็คเลขคู่หรือเลขคี่</h2>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">กรอกตัวเลข</label>
                    <input type="number" id="numberInput" placeholder="กรอกตัวเลข" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 bg-gray-50">
                </div>
                <div class="flex gap-4">
                    <button onclick="checkNumber()" class="flex-1 bg-orange-500 hover:bg-orange-600 text-white py-3 rounded-lg font-medium transition duration-200">
                        ตรวจสอบ
                    </button>
                    <button onclick="clearForm()" class="flex-1 bg-[#cbd5e0] hover:bg-[#a0aec0] text-[#4a5568] py-3 rounded-lg font-medium transition duration-200">
                        เคลียร์ผลลัพธ์
                    </button>
                </div>
                <div id="resultArea" class="mt-6 text-center text-xl font-bold"></div>
            </div>

            <div class="bg-orange-100 p-10 flex-1 text-orange-900 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-4 text-center">วิธีการตรวจสอบเลขคู่-คี่</h2>
                <p class="mb-4 text-center">โปรแกรมจะตรวจสอบตัวเลขที่กรอกว่าเป็นเลขคู่หรือเลขคี่ โดยมีวิธีการดังนี้:</p>
                <div class="bg-white/50 p-6 rounded-xl border border-orange-200">
                    <ul class="space-y-2 list-disc list-inside ml-2 font-medium text-orange-800">
                        <li>เลขคู่: หารด้วย 2 ลงตัว</li>
                        <li>เลขคี่: หารด้วย 2 ไม่ลงตัว</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-orange-800 text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์  นางสาวอัฐภิญญา  ศรีนิล
    </footer>

    <script>
        function checkNumber() {
            const input = document.getElementById('numberInput').value;
            const resultArea = document.getElementById('resultArea');
            
            if (input === "") {
                alert("กรุณากรอกตัวเลขก่อนครับ");
                return;
            }

            const num = parseInt(input);
            if (num % 2 === 0) {
                resultArea.innerText = `เลข ${num} คือ : เลขคู่`;
                // เปลี่ยนผลลัพธ์เลขคู่เป็นสีส้มเข้ม
                resultArea.className = "mt-6 text-center text-xl font-bold text-orange-600";
            } else {
                resultArea.innerText = `เลข ${num} คือ : เลขคี่`;
                // ผลลัพธ์เลขคี่ยังคงใช้สีแดง/ส้มเพื่อให้ดูแตกต่าง
                resultArea.className = "mt-6 text-center text-xl font-bold text-red-500";
            }
        }

        function clearForm() {
            document.getElementById('numberInput').value = "";
            document.getElementById('resultArea').innerText = "";
        }
    </script>
</body>
</html>
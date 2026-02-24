<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.4 สร้างรูปแบบตัวเลขสามเหลี่ยม</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
        .triangle-output {
            line-height: 1.5;
            letter-spacing: 0.2em;
        }
        /* กำหนดสี DeepPink เพิ่มเติม */
        .text-deeppink { color: #FF1493; }
        .bg-deeppink { background-color: #FF1493; }
        .border-deeppink { border-color: #FF1493; }
    </style>
</head>
<body class="bg-rose-50 min-h-screen flex flex-col">

    <nav class="bg-[#FF1493] text-white p-4 flex justify-between items-center px-10 shadow-lg">
        <div class="flex items-center gap-2">
            <div class="bg-white/20 p-1 rounded">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            </div>
            <span class="text-xl font-bold uppercase tracking-wider">สอบกลางภาค</span>
        </div>
        <div class="hidden md:flex gap-6 items-center text-rose-100">
            <a href="#" class="hover:text-white transition">คำอธิบาย</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-white">การเขียนโปรแกรมแบบมีเงื่อนไข <span>▼</span></div>
            <div class="flex items-center gap-1 cursor-pointer hover:text-white">เขียนโปรแกรมวนซ้ำ <span>▼</span></div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl flex flex-col md:flex-row max-w-4xl w-full overflow-hidden min-h-[420px]">
            
            <div class="p-10 flex-1 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-2 text-gray-800 border-l-4 border-[#FF1493] pl-4">2.4 สร้างรูปแบบตัวเลข</h2>
                <h2 class="text-2xl font-bold mb-6 text-gray-800 border-l-4 border-[#FF1493] pl-4">สามเหลี่ยม</h2>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2 font-medium">กรอกจำนวนแถว (n)</label>
                    <input type="number" id="rowsInput" placeholder="กรอกค่า n" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF1493]/50 bg-gray-50">
                </div>
                <div class="flex gap-4">
                    <button onclick="generateTriangle()" class="flex-1 bg-[#FF1493] hover:bg-[#D0107A] text-white py-3 rounded-lg font-medium transition duration-200 shadow-md">
                        แสดงรูปแบบ
                    </button>
                    <button onclick="resetForm()" class="flex-1 bg-slate-200 hover:bg-slate-300 text-slate-600 py-3 rounded-lg font-medium transition duration-200">
                        ล้างข้อมูล
                    </button>
                </div>
                
                <div id="resultArea" class="mt-8 p-6 bg-rose-50 rounded-lg hidden border border-rose-100">
                    <pre id="triangleOutput" class="triangle-output text-center font-mono text-lg text-[#FF1493]"></pre>
                </div>
            </div>

            <div class="bg-[#FFB6C1] p-10 flex-1 text-[#8B0A50] flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6 text-center">รายละเอียดโจทย์</h2>
                <p class="mb-6 text-center leading-relaxed font-medium">
                    กรอกจำนวนแถวที่ต้องการ แล้วโปรแกรมจะแสดงรูปแบบตัวเลขสามเหลี่ยม
                </p>
                <div class="space-y-4 text-sm bg-white/40 p-6 rounded-xl border border-[#FF1493]/20">
                    <p class="font-bold underline text-[#FF1493]">**เงื่อนไขการคำนวณ**</p>
                    <ul class="space-y-3 list-disc list-inside ml-2 opacity-95">
                        <li>ใช้ Loop ซ้อนเพื่อตรวจสอบจำนวนตัวเลขในแต่ละแถว</li>
                        <li>แถวที่ 1 มี 1 ตัวเลข, แถวที่ 2 มี 2 ตัวเลข, ... จนถึงแถวที่ n</li>
                        <li>แสดงผลรูปแบบตัวเลขเรียงลำดับ</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#FF1493] text-white text-center py-4 text-sm">
        © 2024 ข้อสอบกลางภาค สงวนลิขสิทธิ์  นางสาวอัฐภิญญา  ศรีนิล
    </footer>

    <script>
        function generateTriangle() {
            const n = parseInt(document.getElementById('rowsInput').value);
            const resultArea = document.getElementById('resultArea');
            const triangleOutput = document.getElementById('triangleOutput');

            if (isNaN(n) || n < 1) {
                alert("กรุณากรอกจำนวนแถวที่มากกว่า 0 ครับ");
                return;
            }

            let pattern = "";
            for (let i = 1; i <= n; i++) {
                let row = "";
                for (let j = 1; j <= i; j++) {
                    row += j + " ";
                }
                pattern += row.trim() + "\n";
            }

            resultArea.classList.remove('hidden');
            triangleOutput.innerText = pattern;
        }

        function resetForm() {
            document.getElementById('rowsInput').value = "";
            document.getElementById('resultArea').classList.add('hidden');
        }
    </script>
</body>
</html>
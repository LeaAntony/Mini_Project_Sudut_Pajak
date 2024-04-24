@extends('layouts.secondary')

@section('title', 'Forum Pajak')
@section('judulBreadcrumbs', 'Forum Pajak | Sudut Pajak')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="/forum_pajak">Forum Pajak</a></li>
<li>Detail Forum</li>

@endsection

@section('content')
@section('content')
</br>
<div class="container mx-auto mt-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-bold mb-2">Pengaruh Kebijakan Pajak Terhadap Investasi</h2>
            <div class="flex items-center text-sm text-gray-600">
                <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=48" alt="User Avatar" class="h-8 w-8 rounded-full mr-2">
                <p class="font-semibold">John Doe</p>
                <span class="mx-2">|</span>
                <p>10 Agustus 2024</p>
            </div>
        </div>
     
        <div class="px-6 py-4">
            <p class="text-gray-700">Investasi tidak hanya menjadi fondasi penting dalam memacu pertumbuhan ekonomi suatu negara, tetapi juga merupakan indikator vital dari kesehatan ekonomi secara keseluruhan. Namun, dalam mengambil keputusan investasi, perusahaan harus mempertimbangkan sejumlah faktor yang meliputi prospek keuntungan, risiko, dan biaya modal. Di antara faktor-faktor ini, kebijakan pajak yang diberlakukan oleh pemerintah memegang peran yang krusial. Kebijakan pajak, baik berupa keringanan pajak, insentif investasi, maupun tarif pajak penghasilan perusahaan, 
                memiliki potensi besar untuk memengaruhi perilaku investasi perusahaan. Sebagai contoh, keringanan pajak atau insentif yang ditawarkan untuk investasi dalam sektor-sektor tertentu dapat mendorong perusahaan untuk meningkatkan belanja modal dan ekspansi bisnis mereka. Di sisi lain, peningkatan tarif pajak penghasilan perusahaan atau ketidakpastian dalam kebijakan pajak dapat menghambat investasi dan inovasi. Oleh karena itu, dalam memahami pengaruh kebijakan pajak terhadap keputusan investasi perusahaan, kita dapat menggali lebih dalam tentang bagaimana pemerintah dapat menggunakan instrumen pajak untuk merangsang investasi yang produktif dan berkelanjutan. Dengan demikian, diskusi mengenai hubungan antara kebijakan pajak dan investasi perusahaan menjadi sangat penting dalam konteks pembangunan ekonomi yang berkelanjutan dan inklusif.</p>
        </div>
       
        <div class="px-6 py-4 border-t border-gray-200">
            <h3 class="text-lg font-semibold mb-4">Komentar</h3>
        
            <div class="flex items-start mb-4">
                <img src="/images/forum/milliebrown.jpg" alt="User Avatar" class="h-10 w-10 rounded-full mr-4">
                <div>
                    <p class="font-semibold">Millie Bobby Brown</p>
                    <p class="text-sm text-gray-600">12 Agustus 2024</p>
                    <p class="text-gray-700">Saya setuju bahwa kebijakan pajak dapat memiliki dampak yang signifikan terhadap keputusan investasi perusahaan. Sebagai seorang pengusaha kecil, saya sering kali mempertimbangkan tingkat pajak yang diberlakukan dalam mengambil keputusan untuk melakukan ekspansi bisnis atau menambah modal. Insentif pajak yang ditawarkan oleh pemerintah dapat menjadi dorongan besar bagi saya untuk melakukan investasi tambahan dalam usaha saya.</p>
                   
                    <button class="reply-button text-blue-500 mb-2 focus:outline-none">Balas</button>
                    <form action="#" method="POST" class="reply-form mb-2 hidden">
                        @csrf
                        <textarea name="comment" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Balas komentar ini..."></textarea>
                        <button type="submit" class="mt-2 px-4 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Kirim</button>
                    </form>
                    <span class="mx-2">|</span>
                    <button class="show-more-replies text-blue-500 mb-2 focus:outline-none">Lihat Balasan Lainnya</button>
                    <div class="hidden-replies hidden">
                        <div class="flex items-start mb-2 hidden-reply">
                            <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=48" alt="User Avatar" class="h-8 w-8 rounded-full mr-2">
                            <div>
                                <p class="font-semibold">John Doe</p>
                                <p class="text-sm text-gray-600">13 Agustus 2024</p>
                                <p class="text-gray-700">Terima kasih atas tanggapan Anda, Millie. Saya setuju bahwa insentif pajak dapat menjadi pendorong penting bagi pengusaha kecil untuk melakukan investasi tambahan. Namun, penting juga untuk memperhatikan bahwa kebijakan pajak haruslah seimbang dan berkelanjutan agar tidak mengganggu keseimbangan fiskal.</p>
                                <button class="reply-button text-blue-500 mb-2 focus:outline-none">Balas</button>
                                <form action="#" method="POST" class="reply-form mb-2 hidden">
                                    @csrf
                                    <textarea name="comment" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Balas komentar ini..."></textarea>
                                    <button type="submit" class="mt-2 px-4 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex items-start mb-4">
                <img src="/images/forum/emma.jpg" alt="User Avatar" class="h-10 w-10 rounded-full mr-4">
                <div>
                    <p class="font-semibold">Emma Watson</p>
                    <p class="text-sm text-gray-600">15 Agustus 2024</p>
                    <p class="text-gray-700">Saya juga setuju bahwa kebijakan pajak memainkan peran penting dalam memengaruhi investasi perusahaan. Sebagai seorang aktivis lingkungan, saya berharap pemerintah dapat memberlakukan kebijakan pajak yang mendukung investasi dalam teknologi ramah lingkungan dan energi terbarukan.</p>
                    <button class="reply-button text-blue-500 mb-2 focus:outline-none">Balas</button>
                    <form action="#" method="POST" class="reply-form mb-2 hidden">
                        @csrf
                        <textarea name="comment" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Balas komentar ini..."></textarea>
                        <button type="submit" class="mt-2 px-4 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Kirim</button>
                    </form>
                </div> 
            </div>
            
            <div class="flex items-start mb-4">
                <img src="/images/forum//elonmusk.jpg" alt="User Avatar" class="h-10 w-10 rounded-full mr-4">
                <div>
                    <p class="font-semibold">Elon Musk</p>
                    <p class="text-sm text-gray-600">17 Agustus 2024</p>
                    <p class="text-gray-700">Saya sepenuhnya setuju dengan pendapat Emma tentang keberlanjutan. Kita harus memastikan bahwa kebijakan pajak mendukung investasi yang bertanggung jawab terhadap lingkungan.</p>
                    <button class="reply-button text-blue-500 mb-2 focus:outline-none">Balas</button>
                    <form action="#" method="POST" class="reply-form mb-2 hidden">
                        @csrf
                        <textarea name="comment" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Balas komentar ini..."></textarea>
                        <button type="submit" class="mt-2 px-4 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Kirim</button>
                    </form>
                </div>
            </div>
            
            <div class="flex items-start mb-4">
                <img src="/images/forum//jamie.jpg" alt="User Avatar" class="h-10 w-10 rounded-full mr-4">
                <div>
                    <p class="font-semibold">Jamie Bower</p>
                    <p class="text-sm text-gray-600">17 Agustus 2024</p>
                    <p class="text-gray-700">Tentu, sangat menarik untuk membahas dampak kebijakan pajak terhadap investasi perusahaan. Namun, saya penasaran, bagaimana Anda melihat peran kebijakan pajak dalam mendukung inovasi dan pertumbuhan ekonomi berkelanjutan? Apakah Anda percaya bahwa pemerintah seharusnya lebih fokus pada keringanan pajak atau insentif investasi untuk sektor-sektor tertentu, ataukah lebih pada penyesuaian tarif pajak penghasilan perusahaan secara umum?</p>
                    <button class="reply-button text-blue-500 mb-2 focus:outline-none">Balas</button>
                    <form action="#" method="POST" class="reply-form mb-2 hidden">
                        @csrf
                        <textarea name="comment" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Balas komentar ini..."></textarea>
                        <button type="submit" class="mt-2 px-4 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Kirim</button>
                    </form>
                    <span class="mx-2">|</span>
                    <button class="reply-button text-blue-500 mb-2 focus:outline-none">Hapus</button>
                </div>
            </div>

            <div class="flex items-start mb-4">
                <img src="/images/forum/jamie.jpg" alt="User Avatar" class="h-10 w-10 rounded-full mr-4">
                <div>
                    <form action="#" method="POST">
                        @csrf
                        <textarea name="comment" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Tulis komentar Anda..."></textarea>
                        <button type="submit" class="mt-2 px-4 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var replyButtons = document.querySelectorAll('.reply-button');

        replyButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var replyForm = button.nextElementSibling;
                replyForm.classList.toggle('hidden');
            });
        });

        var showMoreButtons = document.querySelectorAll('.show-more-replies');

        showMoreButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var hiddenReplies = button.parentElement.querySelector('.hidden-replies');
                hiddenReplies.classList.toggle('hidden');
                
                if (hiddenReplies.classList.contains('hidden')) {
                    button.textContent = 'Lihat Balasan Lainnya';
                } else {
                    button.textContent = 'Sembunyikan Balasan Lainnya';
                }
            });
        });
    });
</script>
</br>

@endsection

@extends('layouts.master')

@section('title', 'ChocoLux - About Us')

@section('content')
<!-- About Section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>About Our Company</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Choco Lux adalah perusahaan yang didirikan dengan misi untuk menyajikan pengalaman terbaik dalam menikmati produk cokelat premium. Kami percaya bahwa cokelat bukan hanya sekadar makanan, tetapi juga sebuah seni yang mampu menyentuh emosi dan menciptakan momen berharga dalam hidup. Dengan komitmen untuk menghadirkan kualitas terbaik, setiap produk yang kami luncurkan dirancang untuk memanjakan lidah dan memberikan kebahagiaan bagi setiap penikmatnya.
                          </p>
                          <p>
                            Kami mulai perjalanan kami dengan visi untuk menciptakan cokelat yang tidak hanya lezat, tetapi juga menggugah selera. Tim ahli kami, yang terdiri dari chocolatier berpengalaman dan pecinta cokelat sejati, berkolaborasi untuk mengembangkan resep-resep unik yang terinspirasi oleh tradisi cokelat dari berbagai belahan dunia. Kami menggunakan bahan-bahan berkualitas tinggi, termasuk biji kakao terbaik yang dipilih langsung dari petani lokal, untuk memastikan setiap gigitan cokelat kami memberikan rasa yang kaya dan autentik.
                          </p>
                          <p>
                            Di Choco Lux, inovasi adalah inti dari setiap produk yang kami tawarkan. Kami terus bereksperimen dengan kombinasi rasa yang berani dan teknik pembuatan yang modern untuk menciptakan berbagai produk cokelat yang tidak hanya memenuhi, tetapi melampaui harapan pelanggan kami. Dari cokelat batangan klasik yang kaya hingga praline yang elegan dan cokelat isi kreatif, setiap produk dirancang untuk memberikan pengalaman yang unik dan memuaskan.
                          </p>
                          <p>
                            Kami juga sangat menghargai keberlanjutan dan tanggung jawab sosial. Dengan bekerja sama dengan petani kakao yang menerapkan praktik pertanian berkelanjutan, kami berusaha untuk memastikan bahwa setiap biji kakao yang kami gunakan tidak hanya berkualitas tinggi, tetapi juga dihasilkan dengan cara yang adil dan bertanggung jawab terhadap lingkungan. Kami percaya bahwa dengan menghormati sumber daya alam dan mendukung komunitas lokal, kami dapat menciptakan cokelat yang lebih baik untuk generasi mendatang.
                          </p>
                          <p>
                            Di Choco Lux, kami memahami bahwa cokelat adalah tentang berbagi kebahagiaan. Itulah sebabnya kami menawarkan berbagai produk yang sempurna untuk setiap kesempatan—baik itu hadiah untuk orang terkasih, suguhan untuk perayaan spesial, atau sekadar untuk memanjakan diri di hari yang biasa. Dengan desain kemasan yang menarik dan elegan, produk kami tidak hanya enak tetapi juga menjadi pilihan yang sempurna untuk dipersembahkan.
                          </p>
                          <p>
                            Kami mengundang Anda untuk bergabung dalam perjalanan menikmati cokelat yang luar biasa. Temukan kenikmatan tiada tara di setiap produk Choco Lux dan buatlah setiap momen lebih berkesan dengan cokelat berkualitas tinggi kami. Terima kasih telah memilih Choco Lux, tempat di mana cinta terhadap cokelat dipadukan dengan dedikasi untuk menciptakan pengalaman yang luar biasa.
                          </p>
                          <a href="#">
                            <img src="images/color-arrow.png" alt="">
                          </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{ asset('images/about-img.png') }}" alt="About Choco Lux">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



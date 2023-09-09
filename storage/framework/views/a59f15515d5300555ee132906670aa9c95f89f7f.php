
<?php $__env->startSection('about'); ?>


<div class="container">
    <h1 class="text-center mt-5">İletişim</h1>
    <p class="lead">Sizlere hizmet etmek için buradayız! Ürünlerimiz ve hizmetlerimizle ilgili herhangi bir sorunuz varsa veya daha fazla bilgiye ihtiyaç duyuyorsanız, lütfen web sitemizde bulunan iletişim kanalları üzerinden bizimle iletişime geçmekten çekinmeyin.</p>

    <div class="row">
        <div class="col-md-6">
            <h3>Adres</h3>
            <p >TUNCER OĞLU PALET</p>
            <p>Atatürk MH. Özdemir CD. 224 SK. NO:8 <BR>  MANISA/TURGUTLU</p>
        </div>
        <div class="col-md-6"> 
            <h3>Phone</h3>
            <p> +09 536 603 8656</p>
            <p> +09 531 726 1931</p>

        </div>
        <div class="col-md-6">
            <h3>İletişim Formu</h3>
                <?php if(Session::get('message_sent')): ?>
                        <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('message_sent')); ?>

                        </div>
                <?php endif; ?>
            <form action="<?php echo e(route('contact.send')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Adınız</label>
                    <input type="text" id="name" name="name" class="form-control" required >
                </div>
                <div class="form-group">
                    <label for="email">E-posta Adresiniz</label>
                    <input type="email" id="email" name="email" class="form-control" required >
                </div>
                <div class="form-group">
                    <label for="message">Mesajınız</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gönder</button>
            </form>
        </div>
        
    </div>
    <div class="row mt-5">
        <div class="col">
            <h3>Konum</h3>
            <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3122.2452989424!2d27.69085368466115!3d38.50505317963314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b9a74478ab8285%3A0x14f7c0f28c52d031!2sTuncer%20O%C4%9Flu%20Palet!5e0!3m2!1sar!2str!4v1691672573425!5m2!1sar!2str" 
                width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Muhammed\Desktop\HAZIR PROJECTS\ForTuncer\resources\views/iletisim.blade.php ENDPATH**/ ?>
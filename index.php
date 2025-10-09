<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote Commons - Digital Nomad Visa Whitepaper</title>
    <link rel="icon" type="image/png" href="/assets/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles.css">
</head>

<body>
    <div class="container py-5">
        <!-- Tab Navigation with Logos -->
        <ul class="nav nav-tabs justify-content-center mb-4 border-0" id="mainTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active tab-logo-btn" id="remote-commons-tab" data-bs-toggle="tab" data-bs-target="#remote-commons" type="button" role="tab" aria-controls="remote-commons" aria-selected="true">
                    <img src="/assets/logo.png" alt="Remote Commons Logo" class="tab-logo" width="100" height="100" loading="lazy">
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link tab-logo-btn" id="easy-visa-tab" data-bs-toggle="tab" data-bs-target="#easy-visa" type="button" role="tab" aria-controls="easy-visa" aria-selected="false">
                    <img src="/assets/logo-easy.png" alt="E.A.S.Y. VISA Logo" class="tab-logo" width="200" height="100" loading="lazy">
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="mainTabsContent">
            <!-- Remote Commons Tab -->
            <div class="tab-pane fade show active" id="remote-commons" role="tabpanel" aria-labelledby="remote-commons-tab">
                <div class="tab-content-wrapper">
                    <?php include 'components/remote-commons-content.php'; ?>
                </div>
            </div>

            <!-- E.A.S.Y. VISA Tab -->
            <div class="tab-pane fade" id="easy-visa" role="tabpanel" aria-labelledby="easy-visa-tab">
                <div class="tab-content-wrapper">
                    <?php include 'components/easy-visa-content.php'; ?>
                </div>
            </div>
        </div>

        <!-- Author Bio - Outside of tabs -->
        <?php include 'components/author-bio.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
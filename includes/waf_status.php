<?php
/**
 * WAF Status Component
 * Displays WAF status with country flags
 */
?>
<!-- WAF Status Card -->
<div class="container-fluid">
    <div class="card waf-status-card">
        <div class="card-header bg-<?= $wafStatusClass ?>">
            <h3 class="card-title text-white"><i class="fas fa-shield-alt"></i> WAF Status</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h4>Your Location</h4>
                    <div class="country-display">
                        <?php if ($ipCountry !== 'Unknown'): ?>
                            <span class="fi fi-<?= strtolower($ipCountry) ?> country-flag"></span>
                        <?php endif; ?>
                        <p class="lead mb-0"><?= $ipCountry ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>WAF Status</h4>
                    <p class="lead"><span class="status-badge bg-<?= $wafStatusClass ?> text-white"><?= $wafStatus ?></span></p>
                </div>
                <div class="col-md-4">
                    <h4>IP Address</h4>
                    <p class="lead"><?= isset($headers['CF-Connecting-IP']) ? $headers['CF-Connecting-IP'] : 'Unknown' ?></p>
                </div>
            </div>
            <div class="alert alert-<?= $wafStatusClass ?> mt-3">
                <i class="fas fa-info-circle"></i> <?= $wafMessage ?>
            </div>
            
            <!-- WAF Rules Explanation -->
            <div class="mt-4">
                <h5>WAF Configuration Rules:</h5>
                <div class="table-responsive">
                    <table class="table table-bordered mt-2">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fi fi-us country-flag"></span>
                                        <strong>United States (US)</strong>: 
                                        <span class="badge bg-danger ms-2">BLOCK</span>
                                        <span class="ms-2">- Requests from the US are blocked by the WAF</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fi fi-ca country-flag"></span>
                                        <strong>Canada (CA)</strong>: 
                                        <span class="badge bg-warning ms-2">CHALLENGE</span>
                                        <span class="ms-2">- Requests from Canada must pass a Cloudflare challenge</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fi fi-gb country-flag me-2"></span>
                                        <span class="fi fi-jp country-flag me-2"></span>
                                        <span class="fi fi-de country-flag me-2"></span>
                                        <strong>All other countries</strong>: 
                                        <span class="badge bg-success ms-2">ALLOW</span>
                                        <span class="ms-2">- Requests from other countries are allowed without challenges</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
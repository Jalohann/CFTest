<?php
/**
 * Cloudflare Headers Component
 * Displays Cloudflare-specific headers
 */
?>
<!-- Cloudflare-Specific Headers -->
<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3><i class="fas fa-cloud"></i> Cloudflare-Specific Headers</h3>
        </div>
        <div class="card-body">
            <p>Cloudflare adds several special headers to requests that provide valuable information about the request and visitor. These headers are prefixed with "CF-" and can be used to understand how Cloudflare is processing your traffic.</p>
            
            <h4 class="mt-4">Key Cloudflare Headers Found:</h4>
            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th style="width: 25%">Header Name</th>
                            <th style="width: 25%">Value</th>
                            <th style="width: 50%">Explanation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $cfHeaderCount = 0;
                    foreach ($headers as $name => $value):
                        if (stripos($name, 'cf-') === 0 || stripos($name, 'CF-') === 0):
                            $cfHeaderCount++;
                    ?>
                        <tr>
                            <td class="fw-bold"><?= htmlspecialchars($name) ?></td>
                            <td class="text-break"><?= htmlspecialchars($value) ?></td>
                            <td class="small text-muted">
                                <?= isset($explanations[$name]) ? htmlspecialchars($explanations[$name]) : "A Cloudflare-specific header." ?>
                            </td>
                        </tr>
                    <?php
                        endif;
                    endforeach;
                    
                    if ($cfHeaderCount === 0):
                    ?>
                        <tr>
                            <td colspan="3" class="text-center">
                                No Cloudflare-specific headers found. This may indicate that the traffic is not being proxied through Cloudflare.
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
<?php
/**
 * Headers Table Component
 * Displays all HTTP headers with explanations
 */
?>
<!-- Headers Section -->
<div class="container-fluid mt-5">
    <h2 class="mb-4"><i class="fas fa-exchange-alt"></i> HTTP Request Headers</h2>
    <p>Below are all the HTTP request headers received by the origin server. Each header includes an explanation of its purpose.</p>

    <div class="table-responsive">
        <table class="table table-striped header-table">
            <thead class="table-header">
                <tr>
                    <th style="width: 20%">Header Name</th>
                    <th style="width: 30%">Value</th>
                    <th style="width: 50%">Explanation</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($headers as $name => $value): 
                    // Use the explanation if available, otherwise default message.
                    $explanation = getHeaderExplanation($name, $explanations);
                ?>
                <tr>
                    <td class="header-name"><?= htmlspecialchars($name) ?></td>
                    <td class="text-break"><?= htmlspecialchars($value) ?></td>
                    <td class="header-explanation"><?= htmlspecialchars($explanation) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div> 
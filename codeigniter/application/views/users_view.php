<style>
.users { 
    border :1px solid #eee ;
} 
</style>
<div class="users"> 
    <table class="users-table" border="1">
        <thead> 
            <th># </th>
            <th>Username</th>
            <th>Password</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <th> <?php echo $user->Id ?></th>
            <th><?php echo $user->username ?></th>
            <th><?php echo $user->password ?></th>
            <?php endforeach; ?>
        </tbody>
</table>
</div>  

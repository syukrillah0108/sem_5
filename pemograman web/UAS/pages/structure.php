<?php include '../includes/header.php'; ?>
<div class="container my-5">
<style>
  /* Styling umum untuk card */
  .team-container {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
  }
  .team-card {
    background-color: #f5f5f5;
    border-radius: 5px;
    width: 300px;
    padding: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    transition: 0.3s;
  }
  .team-card:hover {
    transform: scale(1);
  }
  .profile-pic {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin-bottom: 10px;
  }
  .name {
    font-size: 1em;
    font-weight: bold;
    margin: 10px 0 5px;
  }
  .role {
    font-size: 0.9em;
    color: #888;
    margin-bottom: 10px;
  }
</style>

<div class="team-container">
  <div class="team-card">
    <img src="/22cid/Syukrillah/UAS/assets/images/Syukrillah.jpg" alt="Profile Picture" class="profile-pic">
    <div class="name">Syukrillah</div>
    <div class="role">CEO</div>
  </div>
  
  <div class="team-card">
    <img src="/22cid/Syukrillah/UAS/assets/images/capybara.jpg" alt="Profile Picture" class="profile-pic">
    <div class="name">Raka Aulia Rahman</div>
    <div class="role">CTO</div>
  </div>

  <div class="team-card">
    <img src="/22cid/Syukrillah/UAS/assets/images/capybara.jpg" alt="Profile Picture" class="profile-pic">
    <div class="name">Muhammad Fajar</div>
    <div class="role">Manajer Operasional</div>
  </div>

  <div class="team-card">
    <img src="/22cid/Syukrillah/UAS/assets/images/capybara.jpg" alt="Profile Picture" class="profile-pic">
    <div class="name">Toha Ramadhan</div>
    <div class="role">Manajer Pemasaran</div>
  </div>

  <div class="team-card">
    <img src="/22cid/Syukrillah/UAS/assets/images/capybara.jpg" alt="Profile Picture" class="profile-pic">
    <div class="name">Isla</div>
    <div class="role">Manajer Keuangan</div>
  </div>
</div>
</div>
<?php include '../includes/footer.php'; ?>
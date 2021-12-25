require("chromedriver");
const { Builder, By, Key } = require("selenium-webdriver");
const assert = require("assert");
let url = {
  "secure validation":
    "http://localhost/Nativ/E-Banjar/data/secure_validation/public/wellcome",
  "non secure":
    "http://localhost/Nativ/E-Banjar/data/non_validation/public/wellcome",
};
//mac os
// let url = {
//   "secure validation":
//     "http://localhost:8888/E-Banjar/data/secure_validation/public/wellcome",
//   "non secure":
//     "http://localhost:8888/E-Banjar/data/no_validation/public/wellcome",
// };
let driver = new Builder().forBrowser("chrome").build();
driver.get(url["non secure"]);

describe("E-banjar Admin", () => {
  it("Melakukan Pencarian Kegiatan", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("ayo maju", Key.RETURN);
  });
  it("Mencoba Button Login", async () => {
    await driver.findElement(By.id("login")).click();
  });
  it("Login Dengan Username dan Password Kosong", async () => {
    await driver
      .findElement(By.xpath("/html/body/div/div[2]/form/div[3]/button"))
      .click();
    let error_usrname = await driver
      .findElement(By.id("err_username"))
      .getText()
      .then((value) => value);
    let error_password = await driver
      .findElement(By.id("err_password"))
      .getText()
      .then((value) => value);
    assert.strictEqual(error_usrname, "Username Kosong !");
    assert.strictEqual(error_password, "Password Salah !");
  });
  it("Login Menggunakan User Sebagai Admin", async () => {
    await driver.findElement(By.id("email")).sendKeys("admin@admin.com");
    await driver.findElement(By.id("password")).sendKeys("1111111111111111");
    await driver
      .findElement(By.xpath("/html/body/div/div[2]/form/div[3]/button"))
      .click();
  });
  it("Menekan Button Profile dan Menekan Button Cancel", async () => {
    await driver.findElement(By.id("profile")).click();
    await driver.findElement(By.id("home")).click();
  });
  it("Menekan Button Kegiatan Masyarakat", async () => {
    await driver.findElement(By.id("kegiatan_masyarakat")).click();
  });
  it("Mencari Kegiatan Masyarakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("ayo maju", Key.ENTER);
    await driver.findElement(By.id("keyword")).sendKeys("", Key.ENTER);
  });
  it("Delete Kegiatan Masyarakat", async () => {
    await driver.findElement(By.id("delete")).click();
  });
  it("Menekan Button Edit Kegiatan Masyarakat", async () => {
    await driver.findElement(By.id("edit")).click();
    let headText = await driver
      .findElement(By.xpath("/html/body/div/main/div[2]/div/form/h1"))
      .getText((value) => value);
    assert.strictEqual(headText, "Update Kegiatan");
  });
  it("Melakukan Update kegiatan Masyarakat", async () => {
    await driver
      .findElement(By.name("foto_kegiatan"))
      .sendKeys("D:/DEV/Nativ/E-Banjar/test/test/img/kegiatan_default.jpeg");
    await driver
      .findElement(By.name("nama_kegiatan"))
      .sendKeys("Kegiatan Pendakian Gunung");
    await driver.findElement(By.name("waktu_kegiatan")).sendKeys("2021-01-01");
    await driver
      .findElement(
        By.xpath("/html/body/div/main/div[2]/div/form/div[2]/button")
      )
      .click();
  });
  it("Membatalkan Update Kegiatan Masyarakat", async () => {
    await driver.findElement(By.id("edit")).click();
    await driver.findElement(By.id("cancel")).click();
  });
  it("Menekan Button Tambah Kegiatan Masyrakat", async () => {
    await driver.findElement(By.id("tambah_kegiatan")).click();
    let headText = await driver
      .findElement(By.xpath("/html/body/div/main/div[2]/div/form/h1"))
      .getText()
      .then((value) => value);
    assert.strictEqual(headText, "Masukkan Kegiatan");
  });
  it("Tambah Kegiatan", async () => {
    await driver
      .findElement(By.name("foto_kegiatan"))
      .sendKeys("D:/DEV/Nativ/E-Banjar/test/test/img/kegiatan_default.jpeg");
    await driver
      .findElement(By.name("nama_kegiatan"))
      .sendKeys("Kegiatan Pendakian Gunung");
    await driver.findElement(By.name("waktu_kegiatan")).sendKeys("2021-01-01");
    await driver
      .findElement(
        By.xpath("/html/body/div/main/div[2]/div/form/div[2]/button")
      )
      .click();
  });
  it("Cancel Update Kegiatan", async () => {
    await driver.findElement(By.id("tambah_kegiatan")).click();
    await driver.findElement(By.id("cancel")).click();
  });
  //
  it("Menekan Button Pencarian Masyarakat", async () => {
    await driver.findElement(By.id("pencarian_masyarakat")).click();
  });
  it("Melakukan Pencarian Masyarakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("admin", Key.ENTER);
    await driver.findElement(By.id("keyword")).sendKeys("", Key.ENTER);
  });
  it("Menekan Button Hapus  Masyarakat", async () => {
    await driver.findElement(By.id("delete")).click();
  });
  it("Menekan Button Edit Masyarakat", async () => {
    await driver.findElement(By.id("edit")).click();
    let headText = await driver
      .findElement(By.xpath("/html/body/div/main/div[2]/div/form/h1"))
      .getText()
      .then((value) => value);
    assert.strictEqual(headText, "Update Data Masyarakat");
  });
  it("Melakuakn Update Masyarakat", async () => {
    await driver
      .findElement(By.name("avatar"))
      .sendKeys("D:/DEV/Nativ/E-Banjar/test/test/img/default.png");

    await driver.findElement(By.name("ktp")).sendKeys("2221141111111111");
    await driver.findElement(By.name("nama")).sendKeys("jhoni indrawan");
    await driver.findElement(By.name("alamat")).sendKeys("br.tamansari");
    await driver.findElement(By.name("email")).sendKeys("user3@user.com");
    await driver.findElement(By.name("no_hp")).sendKeys("087888999888");
    await driver.findElement(By.name("tgl_lahir")).sendKeys("2000-07-04");
    await driver.findElement(By.name("kelamin")).sendKeys("L");
    await driver.findElement(By.name("role_id")).sendKeys("2");
    await driver
      .findElement(
        By.xpath("/html/body/div/main/div[2]/div/form/div[2]/button")
      )
      .click();
  });
  it("Cancel Update Masyrakat", async () => {
    await driver.findElement(By.id("cancel")).click();
  });
  it("Menekan Button Tambah Data Masyarakat", async () => {
    await driver.findElement(By.id("tambah_masyarakat")).click();
    let headText = await driver
      .findElement(By.xpath("/html/body/div/main/div[2]/div/form/h1"))
      .getText()
      .then((value) => value);
    assert.strictEqual(headText, "Tambah Masyarakat");
  });
  it("Menambah Data Masyrakat", async () => {
    await driver
      .findElement(By.name("avatar"))
      .sendKeys("D:/DEV/Nativ/E-Banjar/test/test/img/default.png");
    await driver.findElement(By.name("ktp")).sendKeys("2221111111411131");
    await driver.findElement(By.name("nama")).sendKeys("jhoni");
    await driver.findElement(By.name("alamat")).sendKeys("br.tamansari");
    await driver.findElement(By.name("email")).sendKeys("user3@user.com");
    await driver.findElement(By.name("no_hp")).sendKeys("087888999888");
    await driver.findElement(By.name("tgl_lahir")).sendKeys("2000-07-04");
    await driver.findElement(By.name("kelamin")).sendKeys("L");
    await driver.findElement(By.name("role_id")).sendKeys("2");
    await driver
      .findElement(
        By.xpath("/html/body/div/main/div[2]/div/form/div[2]/button")
      )
      .click();
  });
  it("Cancel Tambah data Masyrakat", async () => {
    await driver.findElement(By.id("tambah_masyarakat")).click();
    await driver.findElement(By.id("cancel")).click();
  });
  it("Menekan Button Logout", async () => {
    await driver.findElement(By.id("logout")).click();
    await driver.close()
  });
});

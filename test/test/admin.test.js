require("chromedriver");
const { Builder, By, Key } = require("selenium-webdriver");
const assert = require("assert");

let url = {
  "secure validation":
    "http://localhost:8888/E-Banjar/data/secure_validation/public/wellcome",
  "non secure":
    "http://localhost:8888/E-Banjar/data/no_validation/public/wellcome",
};
let driver = new Builder().forBrowser("chrome").build();
driver.get(url["secure validation"]);

describe("E-banjar admin", () => {
  it("search activity", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("update", Key.RETURN);
  });
  it("go to login Page", async () => {
    await driver.findElement(By.id("login")).click();
  });
  it("if you not fill form login", async () => {
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
    assert.strictEqual(error_usrname, "Username Tidak Terdaftar !");
    assert.strictEqual(error_password, "Password Salah !");
  });
  it("login using admin account", async () => {
    await driver.findElement(By.id("email")).sendKeys("admin@admin.com");
    await driver.findElement(By.id("password")).sendKeys("1111111111111111");
    await driver
      .findElement(By.xpath("/html/body/div/div[2]/form/div[3]/button"))
      .click();
  });
  it("go to profile page and back to home admin", async () => {
    await driver.findElement(By.id("profile")).click();
    await driver.findElement(By.id("home")).click();
  });
  it("go to kegiatan masyarakat page", async () => {
    await driver.findElement(By.id("kegiatan_masyarakat")).click();
  });
  it("search kegiatan masyarakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("update1", Key.ENTER);
    await driver.findElement(By.id("keyword")).sendKeys("", Key.ENTER);
  });
  it("delete kegiatan masyarakat", async () => {
    await driver.findElement(By.id("delete")).click();
  });
  it("go to update kegiatan masyarakat page", async () => {
    await driver.findElement(By.id("edit")).click();
    let headText = await driver
      .findElement(By.xpath("/html/body/div/main/div[2]/div/form/h1"))
      .getText((value) => value);
    assert.strictEqual(headText, "Update Kegiatan");
  });
  it("update kegiatan masyarakat", async () => {
    await driver
      .findElement(By.name("foto_kegiatan"))
      .sendKeys("/img/kegiatan_default.jpeg");
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
  it("cancel update kegiatan", async () => {
    await driver.findElement(By.id("edit")).click();
    await driver.findElement(By.id("cancel")).click();
  });
  it("go to add kegiatan masyarakat", async () => {
    await driver.findElement(By.id("tambah_kegiatan")).click();
    let headText = await driver
      .findElement(By.xpath("/html/body/div/main/div[2]/div/form/h1"))
      .getText()
      .then((value) => value);
    assert.strictEqual(headText, "Masukkan Kegiatan");
  });
  it("tambah kegiatan", async () => {
    await driver
      .findElement(By.name("foto_kegiatan"))
      .sendKeys(
        "/Users/darmayasa/Documents/programer/MVC/E-Banjar/test/test/img/kegiatan_default.jpeg"
      );
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
  it("cancel tambah kegiatan", async () => {
    await driver.findElement(By.id("tambah_kegiatan")).click();
    await driver.findElement(By.id("cancel")).click();
  });
  //
  it("go to pencarian masyarakat page", async () => {
    await driver.findElement(By.id("pencarian_masyarakat")).click();
  });
  it("search masyarakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("admin", Key.ENTER);
    await driver.findElement(By.id("keyword")).sendKeys("", Key.ENTER);
  });
  it("delete masyarakat", async () => {
    await driver.findElement(By.id("delete")).click();
  });
  it("go to update masyarakat page", async () => {
    await driver.findElement(By.id("edit")).click();
    let headText = await driver
      .findElement(By.xpath("/html/body/div/main/div[2]/div/form/h1"))
      .getText()
      .then((value) => value);
    assert.strictEqual(headText, "Update Data Masyarakat");
  });
  it("update masyarakat", async () => {
    await driver
      .findElement(By.name("avatar"))
      .sendKeys(
        "/Users/darmayasa/Documents/programer/MVC/E-Banjar/test/test/img/default.png"
      );
    await driver.findElement(By.name("ktp")).sendKeys("2221111111111111");
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
  it("cancel update kegiatan masyarakat", async () => {
    await driver.findElement(By.id("edit")).click();
    await driver.findElement(By.id("cancel")).click();
  });
  it("go to add masyarakat", async () => {
    await driver.findElement(By.id("tambah_masyarakat")).click();
    let headText = await driver
      .findElement(By.xpath("/html/body/div/main/div[2]/div/form/h1"))
      .getText()
      .then((value) => value);
    assert.strictEqual(headText, "Tambah Masyarakat");
  });
  it("tambah Masyarakat", async () => {
    await driver
      .findElement(By.name("avatar"))
      .sendKeys(
        "/Users/darmayasa/Documents/programer/MVC/E-Banjar/test/test/img/default.png"
      );
    await driver.findElement(By.name("ktp")).sendKeys("2221111111111111");
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
  it("cancel tambah masyarakat", async () => {
    await driver.findElement(By.id("tambah_masyarakat")).click();
    await driver.findElement(By.id("cancel")).click();
  });
});

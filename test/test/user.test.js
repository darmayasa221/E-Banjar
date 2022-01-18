require("chromedriver");
const { Builder, By, Key } = require("selenium-webdriver");
const assert = require("assert");
let url = {
  "secure validation":
    "http://localhost/Nativ/E-Banjar/data/secure_validation/public/wellcome",
  "non secure":
    "http://localhost/Nativ/E-Banjar/data/non_validation/public/wellcome",
};
// mac os
// let url = {
//   "secure validation":
//     "http://localhost:8888/E-Banjar/data/secure_validation/public/wellcome",
//   "non secure":
//     "http://localhost:8888/E-Banjar/data/no_validation/public/wellcome",
// };
let driver = new Builder().forBrowser("chrome").build();
driver.get(url["non secure"]);

describe("E-banjar User Masyarakat", () => {
  it("Melakuakn Pencarian Kegiatan Masyrakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("update", Key.RETURN);
  });
  it("Menekan Button Login", async () => {
    await driver.findElement(By.id("login")).click();
  });
  it("Login Dengan Username dan Password Kosong", async () => {
    await driver
      .findElement(By.xpath("/html/body/div/div[2]/form/div[3]/button"))
      .click();
  });
  it("Login Menggunakan User Sebagai User Masyarakat", async () => {
    await driver.findElement(By.id("username")).sendKeys("1111111111111112");
    await driver.findElement(By.id("password")).sendKeys("1111111111111112");
    await driver
      .findElement(By.xpath("/html/body/div/div[2]/form/div[3]/button"))
      .click();
  });
  it("Menekan Button Profile", async () => {
    await driver.findElement(By.id("profile")).click();
  });
  it("Melakukan Update Pada Data Diri ", async () => {
    await driver
      .findElement(By.name("avatar"))
      .sendKeys("D:/DEV/Nativ/E-Banjar/test/test/img/default.png");

    await driver.findElement(By.name("email")).sendKeys("user1@user.com");
    await driver.findElement(By.name("no_hp")).sendKeys("087111111111");
    await driver.findElement(By.name("tgl_lahir")).sendKeys("2000-07-04");
    await driver
      .findElement(
        By.xpath("//html/body/div/main/div/div[2]/div/form/div[3]/button")
      )
      .click();
  });
  it("Menekan Button Profile Untuk Melihat Data Diri Setelah Update Dan Menekan Button Cancel", async () => {
    await driver.findElement(By.id("profile")).click();
    await driver.findElement(By.id("cancel")).click();
  });
  it("Menekan Button Pencarian Kegiatan Masyarakat", async () => {
    await driver.findElement(By.id("kegiatan_masyarakat")).click();
  });
  it("Melakukan Pencarian Kegiatan Masyarakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("terbaru", Key.ENTER);
    await driver.findElement(By.id("keyword")).sendKeys("", Key.ENTER);
  });
  it("Menekan Button Lihat Pada Kegiatan Untuk Melihat Kegiatan Secara Spesifik", async () => {
    await driver.findElement(By.id("lihat")).click();
    await driver.findElement(
      By.xpath("/html/body/div/main/div/div[2]/div/div[3]/a")
    );
  });
  it("Menekan Button Pencarian Masyarakat", async () => {
    await driver.findElement(By.id("pencarian_masyarakat")).click();
  });
  it("Melakukan Pecarian Masyarakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("yoga", Key.ENTER);
    await driver.findElement(By.id("keyword")).sendKeys("", Key.ENTER);
  });
  it("Menekan Button Logout", async () => {
    await driver.findElement(By.id("logout")).click();
    await driver.close();
  });
});

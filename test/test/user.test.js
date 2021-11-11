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

describe("E-banjar User", () => {
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
  it("login using user account", async () => {
    await driver.findElement(By.id("email")).sendKeys("user@user.com");
    await driver.findElement(By.id("password")).sendKeys("1111111111111112");
    await driver
      .findElement(By.xpath("/html/body/div/div[2]/form/div[3]/button"))
      .click();
  });
  it("go to profile page user", async () => {
    await driver.findElement(By.id("profile")).click();
  });
  it("update profile", async () => {
    await driver
      .findElement(By.name("avatar"))
      .sendKeys(
        "/Users/darmayasa/Documents/programer/MVC/E-Banjar/test/test/img/default.png"
      );
    await driver.findElement(By.name("email")).sendKeys("user1@user.com");
    await driver.findElement(By.name("no_hp")).sendKeys("087888999888");
    await driver.findElement(By.name("tgl_lahir")).sendKeys("2000-07-04");
    await driver
      .findElement(
        By.xpath("//html/body/div/main/div/div[2]/div/form/div[3]/button")
      )
      .click();
  });
  it("go to profile page user and we se update", async () => {
    await driver.findElement(By.id("profile")).click();
    await driver.findElement(By.id("cancel")).click();
  });
  it("go to kegiatan masyarakat page", async () => {
    await driver.findElement(By.id("kegiatan_masyarakat")).click();
  });
  it("search kegiatan masyarakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("terbaru", Key.ENTER);
    await driver.findElement(By.id("keyword")).sendKeys("", Key.ENTER);
  });
  it("specific activity", async () => {
    await driver.findElement(By.id("lihat")).click();
    await driver.findElement(
      By.xpath("/html/body/div/main/div/div[2]/div/div[3]/a")
    );
  });
  it("go to pencarian masyarakat page", async () => {
    await driver.findElement(By.id("pencarian_masyarakat")).click();
  });
  it("search masyarakat", async () => {
    await driver.findElement(By.id("keyword")).sendKeys("yoga", Key.ENTER);
    await driver.findElement(By.id("keyword")).sendKeys("", Key.ENTER);
  });
  it("logout account", async () => {
    await driver.findElement(By.id("logout")).click();
  });
});

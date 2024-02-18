import javax.swing.*;
import java.awt.*;

public class Gui extends JFrame {
    Checkbox cb1 = new Checkbox ("Cek Pilihan");
    TextField txt = new TextField("Isikan Nama");
    Button bt = new Button ("Kirim");
    Gui()
{
super("PROGRAM GUIKU");
setLocation(200,100);
setSize(400,250);
setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
}
void objek(){
    getContentPane().setLayout(null);
    getContentPane().add(cb1);
    getContentPane().add(txt);
    getContentPane().add(bt);
    cb1.setBounds(40,100,150,20);
    txt.setBounds(30,120,150,20);
    bt.setBounds(30,150,150,20);
    setVisible(true);
}
public static void main(String args[]) {
    Gui ZZ=new Gui();
    ZZ.objek();
}
}



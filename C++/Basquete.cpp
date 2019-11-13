#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main(){
int i;
setlocale(LC_ALL, "Portuguese");
printf("\n Repetição-laço \n");
for(i=1;i<=3;i++){				
	printf("\n Jogar a Bola \n");		
	Sleep(500);
	system("pause");}	
	system("pause");
}

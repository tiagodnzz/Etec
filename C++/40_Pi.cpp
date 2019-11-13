#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main(){
int i,soma=0;
setlocale(LC_ALL, "Portuguese");
printf("\n 4 = Pi \n");
for(i=1;i<=40;i++){	
	if(i%4==0){
	printf("\n Pi \n");
	Beep(5000,500);
			}
	else{		
	printf("\n  %i \n",i);
		}
	}
	system("pause");
}

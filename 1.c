#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  if( (n & 1) == 0 ){ //括弧を追加して処理順を変えました。
    printf("%d は偶数です\n", n);
  }
  return 0;
}

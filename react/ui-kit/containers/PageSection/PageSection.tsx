import React from 'react';
import cn from 'classnames';

type PageSectionProps = {
  className?: string;
  paddingTopLg?: string;
  paddingTop?: string;
  paddingBottomLg?: string;
  paddingBottom?: string;
} & React.PropsWithChildren;

export const PageSection: React.FC<PageSectionProps> = ({
  children,
  className,
  paddingTop = 'pt-[70px]',
  paddingBottom = 'pb-[70px]',
  paddingTopLg = 'lg:pt-[70px]',
  paddingBottomLg = 'lg:pb-[70px]',
}): JSX.Element => (
  <section
    className={cn(
      `${paddingTop} ${paddingBottom} relative ${paddingTopLg} ${paddingBottomLg}`,
      className
    )}
  >
    {children}
  </section>
);
